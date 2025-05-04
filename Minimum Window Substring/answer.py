from collections import defaultdict
def findMin(txt:str , pattern:str) -> str:
    
    if not txt or not pattern or len(pattern) > len(txt):
        return ""
    
    src = defaultdict(int)
    tgt = defaultdict(int)

    for ch in pattern:
        tgt[ch] += 1

    best = ""
    min_len = len(txt) + 1
    right = 0

    for left in range(len(txt)):
        # Expand the window until it contains all required characters
        while right < len(txt) and not all(src.get(ch, 0) >= tgt[ch] for ch in tgt):
            src[txt[right]] += 1
            right += 1
            
        # If the window is valid and smaller than previously found, update best window
        if all(src.get(ch, 0) >= tgt[ch] for ch in tgt) and (right - left) < min_len:
            min_len = right - left
            best = txt[left:right]
        src[txt[left]] -= 1

    return(best)

print(findMin('ADOBECODEBANCE' , 'ABC')) 
