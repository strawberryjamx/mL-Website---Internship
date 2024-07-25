document.addEventListener('DOMContentLoaded', () => {
    const imgs = document.querySelectorAll('.slider img');
    const dots = document.querySelectorAll('.dot');
    let currentImg = 0;
    const interval = 3000;
    let timer = setInterval(changeSlide, interval);

    function changeSlide(n) {
        imgs.forEach((img, i) => {
            img.style.opacity = 0;
            dots[i].classList.remove('active');
        });

        if (n !== undefined) {
            clearInterval(timer);
            timer = setInterval(changeSlide, interval);
            currentImg = n;
        } else {
            currentImg = (currentImg + 1) % imgs.length;
        }

        imgs[currentImg].style.opacity = 1;
        dots[currentImg].classList.add('active');
    }

    changeSlide(currentImg);

    const icons = document.querySelectorAll('.icon');
    const details = document.getElementById('details');

    const stepsData = {
        1: {
            title: 'Diverse Clientele — Exemplifying Discretion and Expertise',
            content: '<b>moodLearning</b> has a diversified portfolio of clients from government, pharmaceutical industry, insurance, nutrition, publishing, international agencies, multinational companies, trade groups, professional societies, non-governmental organizations. Most of our contracts are covered by non-disclosure agreements but, with permission, our partner companies may be referenced in specific presentations, proposals, and reports. At moodLearning, we value discretion.'
        },
        2: {
            title: 'Enduring Partnerships — Committed to Long-Term Growth and Success',
            content: 'We take pride in forging partnerships with clients and keeping these for the long haul. Some of our clients have been with us since we started the company. Over 40% of our annual revenues comes from our installed base. We grow the business, as our partners grow theirs.'
        },
        3: {
            title: 'Strategic Investments — Ensuring Growth and Long-Term Success',
            content: 'The <b>moodLearning</b> portfolio is about added value. <b>moodLearning</b> helps ensure that every contract is an investment in growth and long-term business sustainability.'
        },
        4: {
            title: 'Core Focus — Specialized eLearning Solutions and Support',
            content: 'Much of our current portfolio reflects our core business: eLearning services. Custom learning management system (LMS), interactive media-rich course materials, and related support services constitute most of our contracts with clients and partners.'
        },
        5: {
            title: 'Integrated Systems — Beyond eLearning to Comprehensive Business Solutions',
            content: 'That our partners also need other non-eLearning technology services is at the heart of our mission as a vibrant "one-stop shop" service company. A significant part of our portfolio includes the content management system (CMS); integrated inventory, sales and accounting system; human resource information system (HRIS), customer ticket system.'
        }
    };

    icons.forEach(icon => {
        icon.addEventListener('mouseover', () => {
            const step = icon.getAttribute('data-step');
            details.querySelector('h2').innerText = stepsData[step].title;
            details.querySelector('p').innerHTML = stepsData[step].content;
        });
    });
});
