from typing import Iterable, List


def urutkan_array(data: Iterable[int]) -> List[int]:
    arr = list(data)
    n = len(arr)
    
    for i in range(n):
        for j in range(0, n - i - 1):
            if arr[j] > arr[j + 1]:
                arr[j], arr[j + 1] = arr[j + 1], arr[j]
    return arr

input_1 = [1, 3, 2, 9, 5, -1, 0]
input_2 = [3, 7, -3, 5, 9, 5,-2,1]

print(f"Input: {input_1} | Output: {urutkan_array(input_1)}")
print(f"Input: {input_2} | Output: {urutkan_array(input_2)}")