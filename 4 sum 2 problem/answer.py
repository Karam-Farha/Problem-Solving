from collections import defaultdict
# defaultdict is an array that dose not raise error when you try to access non-existing key
# insted it creates the missing keys

def count_tuples(A, B, C, D):
    sum_ab = defaultdict(int) # default values are 0 due to int parameter
    count = 0

    for x1 in A:
        for x2 in B:
            sum_ab[x1 + x2] += 1

    for x3 in C:
        for x4 in D:
            target = -(x3 + x4)
            if target in sum_ab:
                count += sum_ab[target]

    return count

# Example:
A = [1, 2]
B = [-2, -1]
C = [-1, 2]
D = [0, 2]
print(count_tuples(A, B, C, D))  # Output: 2 (Tuples: (1, -1, -1, 1), (2, -2, 0, 0))