const descriptions = Array.from(document.getElementsByClassName("description"));
descriptions.forEach(element => {
    if(element.innerHTML.length > 197)
    {
        element.innerHTML = element.innerHTML.substring(0, 197) + "...";
    }
});

const titles = Array.from(document.getElementsByClassName("title"));
titles.forEach(element => {
    if(element.innerHTML.length > 25)
    {
        element.innerHTML = element.innerHTML.substring(0, 25) + "...";
    }
});