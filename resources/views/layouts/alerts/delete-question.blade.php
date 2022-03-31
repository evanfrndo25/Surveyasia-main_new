<template id="deleteQuestionTemplate">
  <swal-title>
    Kamu yakin ingin menghapus pertanyaan ini ?
  </swal-title>
  <swal-icon type="warning" color="red"></swal-icon>
  <swal-button type="cancel">
    Batal
  </swal-button>
  <swal-button type="confirm" color="orange">
    Confirm
  </swal-button>
  <swal-param name="allowEscapeKey" value="false" />
  <swal-param name="customClass" value='{ "popup": "my-popup" }' />
</template>
