import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
import Swal from 'sweetalert2'
import '../css/style.css'

window.Swal = Swal
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});
const Toast = Swal.mixin({
  toast: true,
  position: 'center',
  iconColor: 'white',
  customClass: {
    popup: 'colored-toast',
  },
  showConfirmButton: false,
  timer: 5000,
  timerProgressBar: true,
})
// window.Echo.channel('pengajuan')
//         .listen('PengajuanNomor', (e) => {
//             Swal.fire({
//             icon: 'success',
//             title: 'publlic',
//         })
//         });
window.Echo.private('admin')
    .listen('PengajuanNomor', (e) => {
        Toast.fire({
        icon: 'info',
        title: e.message,
       // position:'top-right'
    })        
});
