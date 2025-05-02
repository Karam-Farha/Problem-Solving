def longest_substring(s: str) -> int:
    length = len(s)
    
    if length <= 1:
        return length

    seen_characters = {}
    left = longest = 0
    
    for right in range(length):
        current_char = s[right]
        
        if current_char in seen_characters:
            left = max(left, seen_characters[current_char] + 1)

        seen_characters[current_char] = right
        longest = max(longest, right - left + 1)
    
    return longest

# Here You Can Change The output To See Diffrent Results
print(longest_substring('abbcddee'))