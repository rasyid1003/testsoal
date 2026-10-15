import calendar
from datetime import datetime

def hitung_usia_dan_kabisat(tgl_lahir_str: str):
    tgl_lahir = datetime.strptime(tgl_lahir_str, "%m-%d-%Y")
    sekarang = datetime.now()
    tahun = sekarang.year - tgl_lahir.year
    bulan = sekarang.month - tgl_lahir.month
    hari = sekarang.day - tgl_lahir.day

    if hari < 0:
        bulan -= 1
        hari += 30 
    if bulan < 0:
        tahun -= 1
        bulan += 12

    jumlah_kabisat = 0
    for tahun_cek in range(tgl_lahir.year, sekarang.year + 1):
        if calendar.isleap(tahun_cek):
            jumlah_kabisat += 1

    print(f"Umur: {tahun} tahun, {bulan} bulan, {hari} hari")
    print(f"Jumlah tahun kabisat yang terlewati: {jumlah_kabisat}")

tanggal_input = '01-10-2003'
print(f"Input Tanggal: {tanggal_input}")
hitung_usia_dan_kabisat(tanggal_input)