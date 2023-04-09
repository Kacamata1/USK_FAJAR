# Fungsi Garis
def garis ():
    print("Masukan Lima Buah Nilai")
    print("====================")
# Input Nilai
a = int(input("Nilai A : "))
b = int(input("Nilai B : "))
c = int(input("Nilai C : "))
# Urut 
urut = [a,b,c]
asc = sorted(urut)
des = sorted(urut, reverse=True)
# Max Min Rata Rata
jumlah = a+b+c
max = max(a,b,c)
min = min(a,b,c)
rata = jumlah / len(urut)
# Output
print ("Urutan Nilai Ascending : ", asc)
print ("Urutan Nilai Ascending : ", des)
print ("Nilai MAX : ", max)
print ("Nilai MIN : ", min)
print ("Nilai RATA-RATA : ", int(rata))
