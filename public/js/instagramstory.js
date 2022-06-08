console.log(Instafeed)
var feed = new Instafeed({
    accessToken: 'IGQVJYeURxNGJsbWo3bEpuS05IZAnctaVNrdFdmQmdPMklmZAVVkaWFPdndCbnJVd0laRDd2aHlfQ0lfaU9qUUNGOXNBUFZASeFpJRk5NcHZAnY09CMGJ4dG5nSWhZAUklkc3c3dmVuekxwUjAzbEFUQ042OQZDZD',
    transform: function (item) {
        var d = new Date(item.timestamp);
        item.date = [d.getDate(), d.getMonth(), d.getYear()].join('/');
        return item;
    },
    limit: 14,
    template: '<a href="{{link}}" target="_blank"><img style="width: 139px; height: 139px" title="{{caption}}" src="{{image}}" /></a>'
});

feed.run();
