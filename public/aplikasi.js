// alert jika berhasil
function berhasil(icon,title,respon){
    Swal.fire({
        icon: icon,
        title: title
    }).then((result)=>{
    if(result.isConfirmed){
        Swal.fire(respon, '', icon)
        setTimeout(location.reload(),2000)
    }
    })
}

// konfirmasi
function konfirmasi(title,confirm,denied){
    Swal.fire({
        title: title,
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        denyButtonText: 'No',
        customClass: {
        actions: 'my-actions',
        cancelButton: 'order-1 right-gap',
        confirmButton: 'order-2',
        denyButton: 'order-3',
        }
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(confirm, '', 'success')
        } else if (result.isDenied) {
            Swal.fire(denied, '', 'info')
        }
        })
}

$(document).ready(function () {
    $('#data-barang').DataTable();
    tambah_satuan()
    tambah_jenis()
    delete_satuan()
    delete_jenis()
});

function tambah_satuan(){
    $('#tambah-satuan').on('click', function(){
        let namaSatuan = $('#nama_satuan').val();
        if(namaSatuan ==''){
            berhasil('error','Data tidak boleh kosong','Gagal!!!')
        }else{
            $.ajax({
                type: "post",
                url: "/simpan_satuan",
                data: {
                namasatuan:namaSatuan
                },
                dataType: "json",
                success: function (response) {
                    if(response){
                        berhasil('success','Data berhasil ditambahkan','Tersimpan!')
                    }
                }
            });
        }
    })
}

function delete_satuan(){
    $('.delete-satuan').on('click',function(){
        if(!confirm('Yakin ingin menghapus?')){
            return false
        }
            let id = $(this).data('id');
            $.ajax({
                type: "post",
                url: "/delete_satuan",
                data:{
                    id:id
                },
                dataType: "json",
                success: function (response) {
                    if(response){
                        berhasil('success','Data berhasil dihapus','Terhapus!')
                    }
                }
            });
    })
}

function tambah_jenis(){
    $('#tambah-jenis').on('click',function(){
        let namaJenis = $('#nama_jenis').val()
        if(namaJenis == ''){
            berhasil('error','Data tidak boleh kosong','Gagal!!')
            return false
        }
        $.ajax({
            type: "post",
            url: "/tambah_jenis_barang",
            data: {
            namaJenis:namaJenis
            },
            dataType: "json",
            success: function (response) {
                if(response){
                    berhasil('success','Data berhasil disimpan','Tersimpan')
                }
            }
        });
    })
}

function delete_jenis(){
    $('.delete-jenis').on('click',function(){
        if(!confirm('Yakin ingin menghapus?')){
            return false
        }
        let id = $(this).data('id');
        $.ajax({
            type: "post",
            url: "/delete_jenis",
            data: {
                id:id
            },
            dataType: "json",
            success: function (response) {
                if(response){
                    berhasil('success','Data berhasil dihapus','Terhapus!!');
                }
            }
        });
    })
}