async function makeRequest(requestUrl = '', reqData) {
    var result = axios.post(requestUrl, reqData).then(function (res) {
        console.log(res);
        return res.data;
    }, (error) => {
        if (error.response) {
            // Request made and server responded
            console.log(error.response.data);
            console.log(error.response.status);
            console.log(error.response.headers);
            if (error.response.status !== 500 || error.response.status !== 419) {
                return error.response.data;
            } else {
                return swal({
                    title: 'Error!',
                    text: "Internal Server Error - Please contact the admin",
                    icon: 'error',
                    button: 'Try Again'
                });
            }
        } else if (error.request) {
            // The request was made but no response was received
            console.log(error.request);
        } else {
            // Something happened in setting up the request that triggered an Error
            console.log('Error', error.message);
        }
    })
    return result;


}

const inputFileElements = document.querySelectorAll('input[type=file]');
if (inputFileElements) {
    const fileElements = [...inputFileElements];
    fileElements.forEach(fileElement => {
        fileElement.accept = ".jpg,.png,.jpeg,.pdf"
    })
}


const FormHandler = (form, options) => {
    const formInputs = [...document.forms[form].elements];
    
    document.forms[form].addEventListener('submit', async e => {
        e.preventDefault();

         e.submitter.setAttribute('disabled','true');
        e.submitter.innerHTML = "loading..."    
        let formData = new FormData();

        formInputs.forEach(formInput => {
            if (formInput.value !== '') {
                if (formInput.type === 'file') {
                    formData.append(formInput.name, formInput.files[0]);
                }
                formData.append(formInput.name, formInput.value);
            }
        });
        //check if files are sent in multiples and then add to formData
        if (options.props && options.props.imgs) {
            formData.append('avatars', JSON.stringify(options.props.imgs))
        }
        //check if color props is passed and stringify befroe storing in db
        if (options.props && options.props.colors) {
            formData.append('product_color', JSON.stringify(options.props.colors))
        }

        if(options.props && options.props.products){
            formData.append('products',JSON.stringify(options.props.products))
        }
        if (options.requestUrl) {

            let response = await makeRequest(options.requestUrl, formData);

            console.log(response);
            if (response == null) {
                response = {}
            }
            
        e.submitter.removeAttribute('disabled');
        e.submitter.innerHTML = "Save";
            options.cb(response)
        }
    })
};

// const payWithPayStack = options => {
//     (_ => {
//         let script = document.createElement('script');
//         script.src = 'https://js.paystack.co/v1/inline.js';
//         script.async = true;
//         document.head.appendChild(script);
//     })();

//     setTimeout(_ => {
//         return window.PaystackPop.setup({
//             key: 'pk_test_09382aa6313abb13f39a4994ce801a2abfa26dd6',
//             ...options
//         }).openIframe();
//     }, 1000);

// };


const ErrorHandler = (obj) => {
    document.getElementById('error_list').innerHTML ='';
    Object.keys(obj).forEach(key => {
        console.log(key, obj[key]);
        var li = document.createElement('Li');
        var text = document.createTextNode(obj[key][0])
        li.className = 'text-danger';
        li.appendChild(text);
        document.getElementById('error_list').appendChild(li)

    });
}

// function addFavorite(prodId,buyerId){
//     if(!buyerId){
//         return swal("Please login to add as fovorite")
//     }
//     let response = await makeRequest('favorite/add',{product_id:prodId,buyer_id:buyerId});
    
    
// }