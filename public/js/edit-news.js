var exampleModal = document.getElementById('modal-edit-news')
exampleModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
    // get data news
    var title = button.getAttribute('data-title')
    var description = button.getAttribute('data-description')
    console.log(title)
    var img = button.getAttribute('data-img')
    // isi value
    var inputId = document.getElementById('id')
    var inputTitle = document.getElementById('title')
    var inputDescription = document.getElementsByClassName('editor-desc')
    var inputImg = document.getElementById('img')
    var inputOldImg = document.getElementById('oldImg')
    var formEdit = document.getElementById('form-edit')

    var id = button.getAttribute('data-id')

    inputId.value = id
    inputTitle.value = title
    inputOldImg.value = img
    inputDescription.innerHTML = description
    inputImg.src = '../storage/' + img
    // formEdit.action = "{{ route('admin.news.update'," + id + ") }}";
    formEdit.action = "http://127.0.0.1:8000/admin/news/" + id;
    // http://127.0.0.1:8000/admin/news/1
})