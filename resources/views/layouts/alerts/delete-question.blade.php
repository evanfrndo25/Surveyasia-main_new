<template id="deleteQuestionTemplate">
  <swal-title>
    Are you sure wants to delete question ?
  </swal-title>
  <swal-icon type="warning" color="red"></swal-icon>
  <swal-button type="confirm">
    Confirm
  </swal-button>
  <swal-button type="cancel">
    Cancel
  </swal-button>
  <swal-param name="allowEscapeKey" value="false" />
  <swal-param name="customClass" value='{ "popup": "my-popup" }' />
</template>
