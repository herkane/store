totalPrice = parseFloat(sessionStorage.getItem('totalPrice'))
if (isNaN(totalPrice)) {
    document.getElementById('cart').innerHTML = 0 + ' MAD'
    totalPrice = 0
} else {
    document.getElementById('cart').innerHTML = sessionStorage.getItem('totalPrice') + ' MAD'
}

function addToCart(id) {
    var key = document.getElementsByTagName('body')[0].id
    if (key === 'domaines') {
        var price = document.getElementById(id).parentNode.parentNode.children[0].innerHTML.split(' ')[0]
        var title = document.getElementById(id).parentNode.parentNode.parentNode.children[0].innerHTML
    }
    if (key === 'hosting') {
        var price = document.getElementById(id).parentNode.children[2].innerHTML.split(' ')[0]
        var title = document.getElementById(id).parentNode.children[0].innerHTML
    }
    if (key === 'web') {
        var price = document.getElementById(id).parentNode.children[2].innerHTML
            .split(' ')[0]
        var title = document.getElementById(id).parentNode.children[0].innerHTML
    }
    parsedPrice = parseFloat(price)
    product = {
        'id': key,
        'title': title,
        'price': parsedPrice
    }
    sessionStorage.setItem(key, JSON.stringify(product))
    updateHeaderPrice()
}

function reset() {
    sessionStorage.clear()
    document.getElementById('cart').innerHTML = 0 + ' MAD'
    totalPrice = 0
    updateCheckoutPrice()
    addToCheckout()
    updateHeaderPrice()
    location.reload()
}

function addToCheckout() {
    var domain = JSON.parse(sessionStorage.getItem('domaines'))
    var host = JSON.parse(sessionStorage.getItem('hosting'))
    var web = JSON.parse(sessionStorage.getItem('web'))
    if (domain != null) {
        document.getElementById(domain.id).children[1].innerHTML = domain.title
        document.getElementById(domain.id).children[2].innerHTML = domain.price + ' MAD'
    }
    if (host != null) {
        document.getElementById(host.id).children[1].innerHTML = host.title
        document.getElementById(host.id).children[2].innerHTML = host.price + ' MAD'
    }
    if (web != null) {
        document.getElementById(web.id).children[1].innerHTML = web.title
        document.getElementById(web.id).children[2].innerHTML = web.price + ' MAD'
    }

}

function updateHeaderPrice() {
    var domain = JSON.parse(sessionStorage.getItem('domaines'))
    var host = JSON.parse(sessionStorage.getItem('hosting'))
    var web = JSON.parse(sessionStorage.getItem('web'))
    var domainPrice = 0
    var hostPrice = 0
    var webPrice = 0

    if (domain != null) {
        domainPrice = domain.price
    }
    if (host != null) {
        hostPrice = host.price
    }
    if (web != null) {
        webPrice = web.price
    }

    totalPrice = domainPrice + hostPrice + webPrice

    document.getElementById('cart').innerHTML = totalPrice + ' MAD'

    sessionStorage.setItem('totalPrice', totalPrice)
}

function updateCheckoutPrice() {
    if (isNaN(totalPrice) || totalPrice === 0) {
        document.getElementById('total').innerHTML = 'Rien a payer'
    } else {
        document.getElementById('total').innerHTML = 'Total a payer : ' + sessionStorage.getItem('totalPrice') + ' MAD'
    }
}

document.getElementById('searchButton').onclick = function() {
    var domain = document.getElementById('search').value;
    var extension = document.getElementById('extensions').value;
    var link = 'https://www.hostjahiz.com/cart.php?a=add&domain=register&query=' + domain + extension;
    window.open(link, '_blank');
}