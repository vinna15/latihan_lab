// TIPE DATA let, var, const

// mengacu pada nomber. string boolen
// let data1 = 16
// var data2 = "Gabriel"

// const data3 = true

// data1 = 10.9

// document.write(data2)

// POP UP
// alert("Informasi ini tentang issue sosial")
// confirm("Anda Yakin?")
// prompt("Masukkan nama")

// MENGGUNAKAN ARRAY
// let nama = ["Wanda", "Gabriel", "Galan", "Yasa"]

// // menghapus nama di akhir array
// nama.pop()
// // menambah nama di akhir array
// nama.push("Prima")
// // menambah di awal
// nama.unshift("Kian")
// // menghapus di depan
// nama.shift()
// for(var x=0; x<nama.length; x++){
//     document.write(nama[x]+" ")
// }

// MEMBUAT OBJEK
// let person = {
//     nama : "Gabriel",
//     umur : 19,
//     gender : "laki-laki"

// }
// document.writeln(person.nama)

// // foreach untuk menampung data
// for(var key in person){
//     document.writeln(person[key])
// }

// MENGGUNAKAN ID
// let h1 = document.getElementById('judul')
// h1.innerHTML = "Judul Kita Nih"
// h1.style.backgroundColor = "Lightgray"

// let p = document.getElementById('paragraf')
// p.style.color = "red"
// // p.style = "color: red"


// // MENGGUNAKAN CLASS (untuk elements butuh perulangan), biasanya digunakan di navigasi
// let konten = document.getElementsByClassName("konten")
// for(var x = 0; x<konten.length; x++){
//     konten[x].style.color = "green"
// }

// // MENGGUNAKAN TAG NAME 
// let pe = document.getElementsByTagName('p')
// for(var x = 0; x<pe.length; x++){
//     pe[x].style.color = "blue"
// }


// STUDI KASUS
var aktif = false
function ubahLampu(){
    let lampu = document.getElementById("gambar-lampu")
    let button = document.getElementById("saklar")
    if(aktif == true){
        button.innerHTML = "Nyalakan"
        lampu.src = "lampu-off.png"
    }else{
        button.innerHTML = "Matikan"
        lampu.src = "lampu-on.png"
    }

    aktif = !aktif
    
}
