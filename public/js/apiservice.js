 fetch('https://stagingott.etvwin.com/catalog_lists/home.gzip?item_language=eng®ion=IN&auth_token=q5u8JMWTd2698ncg7q4Q&access_token=Ay6KCkajdBzztJ4bptpW&page=0&page_size=5&npage_size=10')
 .then(response=>{
    return response.json();
 })
 .then(users =>{
    console.log(users);
 })
 
 async function  getapidata(){
   
 const url = await fetch
 ('https://stagingott.etvwin.com/catalog_lists/home.gzip?item_language=eng®ion=IN&auth_token=q5u8JMWTd2698ncg7q4Q&access_token=Ay6KCkajdBzztJ4bptpW&page=0&page_size=5&npage_size=10');
   
       const data =await url.json()
       return data;
 }
getapidata().then(data=>console.log(data));

 const language ='eng';
 const auth_tokens='q5u8JMWTd2698ncg7q4Q';
 const  access_tokens = 'Ay6KCkajdBzztJ4bptpW';
 const regions ='IN';
 const pages=0;
 const page_sizes=5;
 const npage_sizes =10;

    var baseUrl ='https://stagingott.etvwin.com/catalog_lists/home.gzip?item_language' + '=' +language 
    +'geion=' + regions +'&auth_token='+
     auth_tokens +'&access_token='+ access_tokens 
        +    '&page_size=' + page_sizes +'&npage_size=' + npage_sizes;

        while (true) {
            let currentPage = 0;
            let hasMorePages = true; 
          
            while (hasMorePages) {
              const apiurl = baseUrl + '&page=' + currentPage;
          
              
              fetch(apiurl)
                .then(response => response.json())
                .then(data => {
                  if (data.hasMorePages) {
                    console.log('Data of Page ' + currentPage + ':', data);
                            currentPage++;
                  } else {
                    hasMorePages = false;
                  }
                })
                .catch(error => {
                  console.error('Error fetching data of Page ' + currentPage + ':', error);
                  hasMorePages = false; 
                });
            }
            break
    }
    
    