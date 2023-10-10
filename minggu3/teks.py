# Teks yang diberikan
teks = """

# Tokenisasi kata-kata
kata_kata = teks.split()

# Menghitung jumlah kata dalam teks
jumlah_kata = len(kata_kata)
print(f"Jumlah kata dalam teks: {jumlah_kata} kata")

# Menghitung jumlah kalimat dalam teks
kalimat = teks.split(". ")
jumlah_kalimat = len(kalimat)
print(f"Jumlah kalimat dalam teks: {jumlah_kalimat} kalimat")

# Mencari kata tertentu dalam teks
kata_dicari = "shuttlecock"
if kata_dicari.lower() in teks.lower():
    print(f"Kata '{kata_dicari}' ditemukan dalam teks.")
else:
    print(f"Kata '{kata_dicari}' tidak ditemukan dalam teks.")

# Menampilkan beberapa kalimat pertama dalam teks
print("Beberapa kalimat pertama dalam teks:")
for i in range(3):
    print(kalimat[i])
