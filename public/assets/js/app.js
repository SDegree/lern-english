class ItmCtl {
    sysBtn() {
        const input = document.querySelector(".arti"),
            ui = new Ui(),
            terjemahan = document.querySelector(".terjemahan").textContent;
        document.querySelector(".cek").addEventListener("click", (e) => {
            // console.log(input.value.toLowerCase());
            if (input.value === "") {
                ui.fail("isi form input");
            } else {
                if (input.value.toLowerCase() === terjemahan.trim()) {
                    document.querySelector(".page").textContent == 10
                        ? this.page()
                        : ui.success();
                } else {
                    document.querySelector(".page").textContent == 10
                        ? ui.fail(terjemahan.trim())
                        : ui.fail(terjemahan.trim());
                }
                console.log(document.querySelector(".page").textContent);
            }
        });
    }

    sysChoose() {
        document.querySelector(".choose").addEventListener("click", (e) => {
            sessionStorage.removeItem("salah");
        });
    }
    page() {
        if (document.querySelector(".page").textContent == 10) {
            const ui = new Ui();
            if (sessionStorage.getItem("salah") > 3) {
                ui.gagal();
                console.log("gagal");
            } else {
                ui.berhasil();
                console.log("berhasil");
            }
        }
    }
}

class Ui {
    success() {
        document.querySelector(
            ".check"
        ).innerHTML = `<div class="text-info"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg> Benar</div>`;
        document.querySelector(".next").removeAttribute("hidden");
        // sessionStorage.getItem("hasil")
        //     ? sessionStorage.setItem(
        //           "hasil",
        //           Number(sessionStorage.getItem("hasil")) + 1
        //       )
        //     : sessionStorage.setItem("hasil", 1);
        // console.log(sessionStorage.getItem("hasil"));
    }

    fail(terjemah) {
        document.querySelector(
            ".check"
        ).innerHTML = `<div class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg> Salah <h2 class="ms-5 text-capitalize">${terjemah}</h2></div>`;
        document.querySelector(".next").setAttribute("hidden", "hidden");
        sessionStorage.getItem("salah")
            ? sessionStorage.setItem(
                  "salah",
                  Number(sessionStorage.getItem("salah")) + 1
              )
            : sessionStorage.setItem("salah", 1);
        console.log(sessionStorage.getItem("salah"));
    }

    gagal() {
        document.querySelector(
            ".check"
        ).innerHTML = `Anda gagal, nilai anda tidak mencukupi ${
            (10 - Number(sessionStorage.getItem("salah"))) * 10
        } <br> Nilai minimum 70`;
        document.querySelector(".next").setAttribute("hidden", "hidden");
        document.querySelector(".nextLvl").setAttribute("hidden", "hidden");
        document.querySelector(".ulangi").removeAttribute("hidden");
    }

    berhasil() {
        document.querySelector(
            ".check"
        ).innerHTML = `Selamat anda berhasil, nilai anda ${
            (10 - Number(sessionStorage.getItem("salah"))) * 10
        }`;
        document.querySelector(".next").setAttribute("hidden", "hidden");
        document.querySelector(".nextLvl").removeAttribute("hidden");
    }
}

class App {
    eventBtn() {
        // if (document.querySelector(".page").textContent != 10) {
        const ctl = new ItmCtl();
        ctl.sysBtn();
        // }
    }

    choose() {
        const ctl = new ItmCtl();
        ctl.sysChoose();
    }
}

const app = new App();

if (document.querySelector(".cek")) app.eventBtn();
if (document.querySelector(".choose")) app.choose();
// if (document.querySelector(".page")) app.page();
