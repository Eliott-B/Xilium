"""
IA for Xilium
Predict the category of a given ticket description
"""

import pickle
import sys

def main():
    """Main function to predict the category of a given ticket description
    """
    description = sys.argv[1]

    with open(sys.path[0] + "/data/tickets.pkl", "rb") as f:
        my_model = pickle.load(f)

    print(my_model.predict([description])[0])

if __name__ == '__main__':
    main()
