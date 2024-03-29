var vanillaCalendar = {
    month: document.querySelectorAll('[data-calendar-area="month"]')[0],
    next: document.querySelectorAll('[data-calendar-toggle="next"]')[0],
    previous: document.querySelectorAll('[data-calendar-toggle="previous"]')[0],
    label: document.querySelectorAll('[data-calendar-label="month"]')[0],
    activeDates: null,
    date: new Date(),
    todaysDate: new Date(),

    init: function (options) {
        this.options = options
        this.date.setDate(1)
        this.createMonth()
        this.createListeners()
    },

    createListeners: function () {
        var _this = this
        this.next.addEventListener('click', function () {
            _this.clearCalendar()
            var nextMonth = _this.date.getMonth() + 1
            _this.date.setMonth(nextMonth)
            _this.createMonth()
        })
        // Clears the calendar and shows the previous month
        this.previous.addEventListener('click', function () {
            _this.clearCalendar()
            var prevMonth = _this.date.getMonth() - 1
            _this.date.setMonth(prevMonth)
            _this.createMonth()
        })
    },

    createDay: function (num, day, year) {
        var newDay = document.createElement('div')
        var dateEl = document.createElement('span')
        dateEl.innerHTML = num
        newDay.className = 'vcal-date'
        newDay.setAttribute('data-calendar-date', this.date)

        // if it's the first day of the month
        if (num === 1) {
            if (day === 0) {
                newDay.style.marginLeft = (6 * 14.28) + '%'
            } else {
                newDay.style.marginLeft = ((day - 1) * 14.28) + '%'
            }
        }

        if (this.options.disablePastDays && this.date.getTime() <= this.todaysDate.getTime() - 1) {
            newDay.classList.add('vcal-date--disabled')
        } else {
            newDay.classList.add('vcal-date--active')
            newDay.setAttribute('data-calendar-status', 'active')
        }

        if (this.date.toString() === this.todaysDate.toString()) {
            newDay.classList.add('vcal-date--today')
        }

        newDay.appendChild(dateEl)
        this.month.appendChild(newDay)
    },

    dateClicked: function () {
        var _this = this
        this.activeDates = document.querySelectorAll(
            '[data-calendar-status="active"]'
        )
        for (var i = 0; i < this.activeDates.length; i++) {
            this.activeDates[i].addEventListener('click', function (event) {
                var pickedDate = this.dataset.calendarDate.split(" ");

                switch (pickedDate[0]){
                    case 'Mon':
                        pickedDate[0] = 'Pazartesi'
                        break;
                    case 'Tue':
                        pickedDate[0] = 'Salı'
                        break;
                    case 'Wed':
                        pickedDate[0] = 'Çarşamba'
                        break;
                    case 'Thu':
                        pickedDate[0] = 'Perşembe'
                        break;
                    case 'Fri':
                        pickedDate[0] = 'Cuma'
                        break;
                    case 'Sat':
                        pickedDate[0] = 'Cumartesi'
                        break;
                    case 'Sun':
                        pickedDate[0] = 'Pazar'
                        break;
                }
                switch (pickedDate[1]){
                    case 'Jan':
                        pickedDate[1] = 'Ocak'
                        break;
                    case 'Feb':
                        pickedDate[1] = 'Şubat'
                        break;
                    case 'Mar':
                        pickedDate[1] = 'Mart'
                        break;
                    case 'Apr':
                        pickedDate[1] = 'Nisan'
                        break;
                    case 'May':
                        pickedDate[1] = 'Mayıs'
                        break;
                    case 'Jun':
                        pickedDate[1] = 'Haziran'
                        break;
                    case 'Jul':
                        pickedDate[1] = 'Temmuz'
                        break;
                    case 'Aug':
                        pickedDate[1] = 'Ağustos'
                        break;
                    case 'Sep':
                        pickedDate[1] = 'Eylül'
                        break;
                    case 'Oct':
                        pickedDate[1] = 'Ekim'
                        break;
                    case 'Nov':
                        pickedDate[1] = 'Kasım'
                        break;
                    case 'Dec':
                        pickedDate[1] = 'Aralık'
                        break;
                }

                var pickedDateCor = `${pickedDate[2]} ${pickedDate[1]} ${pickedDate[0]} `;

                var picked = document.getElementById(
                    'selectedDateInput'
                )
                picked.value=pickedDateCor;
                _this.removeActiveClass()
                this.classList.add('vcal-date--selected')
            })
        }
    },

    createMonth: function () {
        var currentMonth = this.date.getMonth()
        while (this.date.getMonth() === currentMonth) {
            this.createDay(
                this.date.getDate(),
                this.date.getDay(),
                this.date.getFullYear()
            )
            this.date.setDate(this.date.getDate() + 1)
        }
        // while loop trips over and day is at 30/31, bring it back
        this.date.setDate(1)
        this.date.setMonth(this.date.getMonth() - 1)

        this.label.innerHTML =
            this.monthsAsString(this.date.getMonth()) + ' ' + this.date.getFullYear()
        this.dateClicked()
    },

    monthsAsString: function (monthIndex) {
        return [
            'Ocak',
            'Şubat',
            'Mart',
            'Nisan',
            'Mayıs',
            'Haziran',
            'Temmuz',
            'Ağustos',
            'Eylül',
            'Ekim',
            'Kasım',
            'Aralık'
        ][monthIndex]
    },

    clearCalendar: function () {
        vanillaCalendar.month.innerHTML = ''
    },

    removeActiveClass: function () {
        for (var i = 0; i < this.activeDates.length; i++) {
            this.activeDates[i].classList.remove('vcal-date--selected')
        }
    }
}
