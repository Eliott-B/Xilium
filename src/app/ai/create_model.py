"""
IA for Xilium
Predict category of a given ticket description

Create a model to predict the category of a given ticket description
"""

import pickle
import pandas as pd
import numpy as np
from sklearn.pipeline import Pipeline
from sklearn.model_selection import train_test_split
from sklearn.model_selection import GridSearchCV
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.linear_model import LogisticRegression

df = pd.read_csv("./data/tickets.csv")
X = df.description
y = df.categorie
X_train, X_test, y_train, y_test = train_test_split(X, y, random_state=42)

pip = Pipeline([
    ("tfidf", TfidfVectorizer()),
    ("model", LogisticRegression(class_weight='balanced', max_iter=1000))
])
parameters = {"tfidf__ngram_range": [(1, 1), (1, 2)],
              "model__C": np.logspace(-2, 2, 5)}
gs = GridSearchCV(pip, parameters, verbose=1)
gs.fit(X_train, y_train)
y_test_pred = gs.predict(X_test)

with open("./data/tickets.pkl", "wb") as f:
    pickle.dump(gs, f)
