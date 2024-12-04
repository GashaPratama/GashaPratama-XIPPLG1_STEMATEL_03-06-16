document.getElementById('toggle-teachers').addEventListener('click', function () {
    const hiddenTeachers = document.querySelectorAll('.hidden-teacher');
    const isHidden = hiddenTeachers[0].style.display === 'none';

    if (isHidden) {
        hiddenTeachers.forEach(item => (item.style.display = 'block'));
        this.classList.remove('fa-chevron-down');
        this.classList.add('fa-chevron-up');
    } else {
        hiddenTeachers.forEach(item => (item.style.display = 'none'));
        this.classList.remove('fa-chevron-up');
        this.classList.add('fa-chevron-down');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const hiddenTeachers = document.querySelectorAll('.hidden-teacher');
    hiddenTeachers.forEach(item => (item.style.display = 'none'));
});

document.getElementById('toggle-achievements').addEventListener('click', function () {
    const hiddenAchievements = document.querySelectorAll('.hidden-achievement');
    const isHidden = hiddenAchievements[0].style.display === 'none';

    if (isHidden) {
        hiddenAchievements.forEach(item => (item.style.display = 'block'));
        this.classList.remove('fa-chevron-down');
        this.classList.add('fa-chevron-up');
    } else {
        hiddenAchievements.forEach(item => (item.style.display = 'none'));
        this.classList.remove('fa-chevron-up');
        this.classList.add('fa-chevron-down');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const hiddenAchievements = document.querySelectorAll('.hidden-achievement');
    hiddenAchievements.forEach(item => (item.style.display = 'none'));
});

