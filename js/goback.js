function goBack()
  {
  setCookie('student_number', '', -1);
  window.history.back()
  }