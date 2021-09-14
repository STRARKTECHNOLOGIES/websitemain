/*--------------------------------------------------
                  COPY IP BUTTON
--------------------------------------------------*/

(() => {

  if (document.getElementById('header')) {
    document.getElementById('copyip').addEventListener('click', () => {
      navigator.clipboard.writeText('play.xite-mc.ml').then((error) => {
        if (error)
          console.error(error);
        else
          Swal.fire({
            icon: 'success',
            title: 'Server IP Copied',
            html: 'Server IP successfully copied to the clipboard.'
        })
      });
    });
  }

})();