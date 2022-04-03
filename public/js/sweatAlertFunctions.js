window.addEventListener('swal:modal', event => { 
    swal({
    title: event.detail.message,
    text: event.detail.text,
    icon: event.detail.type,
    buttons: false,
    timer: 2000
    });
});

window.addEventListener('swal:productUpdated', event => { 
    swal({
    title: event.detail.message,
    icon: event.detail.type,
    buttons: false,
    timer: 2000
    });
});

window.addEventListener('swal:payment', event => { 
    swal({
    title: event.detail.message,
    icon: event.detail.type,
    timer: event.detail.timer,
    buttons: false
    });
});

window.addEventListener('swal:saleClosed', event => { 
    swal({
    title: event.detail.message,
    icon: event.detail.type,
    timer: event.detail.timer,
    buttons: false
    });
});

window.addEventListener('swal:confirm', event => { 
    swal({
    title: event.detail.message,
    text: event.detail.text,
    icon: event.detail.type,
    buttons: true,
    dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
        window.livewire.emit('deleteCustomer', event.detail.id);
    }
    });
});
 
