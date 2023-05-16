
/**
 * first function >> auth_api needed for key to get the token of operation 
 */
const key_api = 'ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2ljSEp2Wm1sc1pWOXdheUk2TnpjM01qQXlMQ0p1WVcxbElqb2lhVzVwZEdsaGJDSjkudUVzVFd0ZDA1Tk1iaHBwNjh6OVFndFN3QmNzWHBmeTNBYUVwdG9hb1NyeFljOUk0MFA5cDd1cWFHc1FXWjNLbkFKYkxOdm5HNVlHd25pQ1lYT2w5emc=';

async function auth_api(){

    let data={

        "api_key": key_api
    }

    let request = await fetch('https://accept.paymob.com/api/auth/tokens',{
        method:'post',
        headers:{'content-Type' : 'application/json'},
        body: JSON.stringify(data)
    })

    let response = await request.json()
    let token = response.token

    registration_api(token)
}
/**
 * second function needed the token from the first function to get the id of operation
 */
async function registration_api(token){
    let data = {
        "auth_token":  token,
        "delivery_needed": "false",
        "amount_cents": "100",
        "currency": "EGP",
        "items": [],
      }

    let request= await fetch('https://accept.paymob.com/api/ecommerce/orders', {
        method: 'post',
        headers: {'Content-Type':'application/json'},
        body: JSON.stringify(data)
    })
    let response = await request.json()

    let id = response.id

    payment_key(id, token)
}

/**
 * thrid function needed the token from the first function
 * and needed the id from the second function 
 *  to get the key_payment_request of operation
 */
async function payment_key(id, token){
    let data = {
        "auth_token": token,
        "amount_cents": "100", 
        "expiration": 3600, 
        "order_id": id,
        "billing_data": {
          "apartment": "803", 
          "email": "claudette09@exa.com", 
          "floor": "42", 
          "first_name": "Clifford", 
          "street": "Ethan Land", 
          "building": "8028", 
          "phone_number": "+86(8)9135210487", 
          "shipping_method": "PKG", 
          "postal_code": "01898", 
          "city": "Jaskolskiburgh", 
          "country": "CR", 
          "last_name": "Nicolas", 
          "state": "Utah"
        }, 
        "currency": "EGP", 
        "integration_id": 3785313,
        
      }

    let request = await fetch('https://accept.paymob.com/api/acceptance/payment_keys',{
        method: 'post',
        headers: {'Content-Type':'application/json'},
        body: JSON.stringify(data)
    })

    let response = await request.json()

     token = response.token
    // console.log(token)
    console.log(response)
    cardPayment(token)
}

/* last three functions just for 3 Essentioal steps taken to any gate_payment
    Now the Essentional step of payment 
*/ 
async function cardPayment(token){
    let iframeURL = `https://accept.paymob.com/api/acceptance/iframes/757931?payment_token=${token}`
    location.href = iframeURL
}

