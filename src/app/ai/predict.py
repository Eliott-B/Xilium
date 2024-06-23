"""
IA for Xilium
Predict the category of a given ticket description
"""

import pickle
import sys

description = sys.argv[1]

with open("./data/tickets.pkl", "rb") as f:
    my_model = pickle.load(f)

print(my_model.predict([description]))
