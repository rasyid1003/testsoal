def pembalik_string(teks: str) -> str:
    if len(teks) == 0:
        return teks
    return pembalik_string(teks[1:]) + teks[0]
input_1 = 'INDONESIA'
input_2 = 'LARAVEL'
input_3 = 'MALAYSIA'
print(f"Input: {input_1} | Output: {pembalik_string(input_1)}")
print(f"Input: {input_2} | Output: {pembalik_string(input_2)}")
print(f"Input: {input_3} | Output: {pembalik_string(input_3)}")