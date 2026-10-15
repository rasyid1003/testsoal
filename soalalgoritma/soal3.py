def cari_nilai(arr: list[int], pilihan: str) -> int:
    target: int = arr[0]
    
    for angka in arr:
        if pilihan == 'A':
            if angka > target: 
                target: int = angka
        elif pilihan == 'B':
            if angka < target: 
                target = angka
    return target

# --- AREA TEST (UBAH VARIABEL DISINI) ---
data_1 = [1, 3, 2, 9, 5]
data_2 = [3, 7, -3, 5, 9, 5]

print(f"Input: {data_1}, Pilihan: A | Output: {cari_nilai(data_1, 'A')}")
print(f"Input: {data_2}, Pilihan: B | Output: {cari_nilai(data_2, 'B')}")