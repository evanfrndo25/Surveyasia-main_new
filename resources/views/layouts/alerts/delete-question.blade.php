<template id="deleteQuestionTemplate">
  <swal-title>
    Hapus Pertanyaan
  </swal-title>
  <swal-html>
    Pertanyaan ini akan dihapus secara permanen dari survey Anda dan tidak dapat dikembalikan lagi. Apakah Anda yakin ingin menghapus pertanyaan ini?
  </swal-html>
  
  <swal-icon type="warning"></swal-icon>

  <swal-button type="cancel">
    Batal
  </swal-button>
  <swal-button type="confirm">
    Ya
  </swal-button>
  
  <swal-param name="buttonStyling" value="false" />
  <swal-param name="allowEscapeKey" value="false" />
  <swal-param name="customClass" value='{ "popup": "my-popup", "cancelButton": "btn btn-gray", "confirmButton": "btn btn-save", "icon": "icon-warning", "title": "text-delete", "htmlContainer": "text-desc-delete"  }' />
</template>
