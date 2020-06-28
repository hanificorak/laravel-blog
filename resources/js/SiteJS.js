export class Site {
    constructor() {
        this.load();
    }
    load() {
        this.events();

    };
    events() {
        $("body").on("click", ".contact-send", function () {
            site.send();
        });
    };

    send() {
        alert("Yapım aşamasında.");
        // $.ajax({
        //     type: 'POST',
        //     url: "/iletisimsend",
        //     data: {
        //         ad: "asdasd"
        //     }
        // });
    }
}

window.site = new Site();