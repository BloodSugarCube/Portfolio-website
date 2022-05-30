
const mediaQuery = window.matchMedia ('(max-width: 1199px)');
function handleTabletChange (e) {
    if (e.matches) {
        document.getElementById('text-description').innerHTML = 'Я помогаю небольшим агентствам и компаниям воплощать их идеи в жизнь. Используя Figma, Photoshop, VS Code и кофе, я претворяю ваши требования в реальность - вовремя и в рамках бюджета.';
    } else {
        document.getElementById('text-description').innerHTML = '<p>Я помогаю небольшим агентствам и компаниям воплощать их идеи в жизнь.</p><p>Используя Figma, Photoshop, VS Code и кофе, я претворяю ваши</p><p>требования в реальность - вовремя и в рамках бюджета.</p>';
    }
}
mediaQuery.addListener (handleTabletChange)
handleTabletChange (mediaQuery)