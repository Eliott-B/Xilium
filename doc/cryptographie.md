# Documentation sur les Fonctions de Hachage Cryptographique

![image documentation cryptographie](./img/doc_crypto_img.png)

## Introduction
Une fonction de hachage cryptographique est un algorithme qui prend en entrée des données de taille arbitraire et

produit en sortie une empreinte numérique de taille fixe, généralement beaucoup plus petite. Ces fonctions sont

largement utilisées en sécurité informatique pour diverses tâches telles que la vérification d'intégrité des données,
la génération de signatures numériques et la sécurisation des communications.

## Propriétés d'une Fonction de Hachage Cryptographique
Les propriétés essentielles d'une fonction de hachage cryptographique sont les suivantes :
* **Résistance aux collisions** : Il doit être difficile de trouver deux entrées différentes qui produisent la même empreinte.
* **Déterminisme** : Pour une même entrée, la fonction de hachage doit toujours produire la même sortie.
* **Facilité de calcul** : Il doit être facile et rapide de calculer la fonction de hachage pour une entrée donnée.
* **Résistance aux préimages** : Il doit être difficile de trouver une entrée donnée à partir de son empreinte.
* **Résistance aux deuxièmes préimages** : Il doit être difficile de trouver une deuxième entrée qui produit la même  
  empreinte qu'une entrée donnée.

## Fonctionnement de MD5
MD5 (Message Digest Algorithm 5) est l'un des algorithmes de hachage les plus connus, bien qu'il soit maintenant


considéré comme peu sûr pour les applications cryptographiques en raison de ses vulnérabilités. Son fonctionnement
comprend les étapes suivantes :
* **Initialisation des variables** : MD5 initialise un ensemble de variables pour stocker les hachés intermédiaires.
* **Padding** : Les données d'entrée sont remplies pour être une longueur multiple de 512 bits moins 64 bits.
* **Traitement des blocs** : Les données d'entrée sont divisées en blocs de 512 bits et traitées via des opérations de permutation, de substitution et de décalage.
* **Génération de la sortie** : Les valeurs finales des variables sont concaténées pour former la sortie de 128 bits.

## Utilisation dans la Cryptographie
Les fonctions de hachage sont utilisées dans divers protocoles de sécurité, tels que la vérification d'intégrité des


données, la génération de signatures numériques, la création de résumés de mots de passe sécurisés et la sécurisation
des communications. Elles sont essentielles pour garantir la sécurité et l'authenticité des données dans de nombreux
systèmes informatiques et réseaux.



# Documentation du système de cryptage RC4

## Introduction

Le système de cryptage RC4 (Rivest Cipher 4) est un algorithme de chiffrement à flux qui est largement utilisé pour
protéger les données confidentielles sur internet. Il a été conçu par Ron Rivest en 1987 et est considéré comme rapide
et robuste pour de nombreuses applications.

Ce document vise à fournir une explication détaillée de l'implémentation de RC4 dans le contexte de votre site web pour
protéger les données des utilisateurs.

## Fonctionnement de l'algorithme RC4

RC4 utilise une clé secrète pour générer une séquence pseudo-aléatoire de bytes, appelée "stream", qui est ensuite
combinée avec les données à chiffrer via un simple XOR (OU exclusif).

### Étape 1: Initialisation

L'algorithme commence par initialiser un tableau d'état (S-box) de 256 bytes et permuter ce tableau selon la clé fournie
par l'utilisateur.

### Étape 2: Génération de la séquence pseudo-aléatoire

Une fois que la S-box est initialisée, RC4 génère une séquence pseudo-aléatoire de bytes en parcourant la S-box de
manière itérative. Cette séquence est basée sur la clé initiale.

### Étape 3: Chiffrement

Pour chiffrer les données, RC4 utilise la séquence pseudo-aléatoire générée dans l'étape précédente et la combine avec
les données d'entrée via un XOR byte par byte.

## Implémentation dans votre site web

### Génération de la clé

L'utilisateur fournit une clé pour chiffrer ses données. Cette clé est utilisée pour initialiser l'algorithme RC4.

### Chiffrement des données

Une fois la clé générée, les données fournies par l'utilisateur sont chiffrées en utilisant l'algorithme RC4 avec la
clé générée précédemment.

### Déchiffrement des données

Pour déchiffrer les données, le processus est inversé. La même clé est utilisée pour initialiser l'algorithme RC4, et la
séquence pseudo-aléatoire générée est alors utilisée pour décrypter les données chiffrées.

## Sécurité

Il est important de noter que RC4 a été sujet à plusieurs vulnérabilités au fil des années et n'est plus considéré comme
sûr pour des utilisations sensibles. Des alternatives plus sécurisées telles que AES (Advanced Encryption Standard) sont
recommandées pour les nouvelles implémentations.

## Conclusion du RC4

Le système de cryptage RC4 est utilisé sur votre site web pour protéger les données des utilisateurs. Cependant, il est
crucial de comprendre ses limitations en termes de sécurité et de considérer des alternatives plus robustes pour une
protection adéquate des données sensibles.

---

Cette documentation vous donne un aperçu général de votre système de cryptage RC4 et de son fonctionnement dans le
contexte de votre site web. Vous pouvez bien sûr l'adapter en fonction des détails spécifiques de votre implémentation.