weights = [1, 8, 6, 2, 5, 4, 8, 3, 7]
weights.sort1()
limit = 8
ans = 0
left = 0
right = len(weights) - 1
while left <= right:
    if weights[left] + weights[right] <= limit:
        left += 1
        right -=1
        ans += 1
    else:
        right -= 1
        ans += 1
print("Number of pairs:", ans)