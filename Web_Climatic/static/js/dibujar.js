const xlabels=[];
const ytemps=[];


async function chartIt(){
await  get_Data();
const ctx = document.getElementById('chart').getContext('2d');

 const chart = new Chart(ctx, {

 type: 'line',
 data: {
     labels: xlabels,
     datasets: [{
         label: 'Concentracion Co2',
       
         borderColor: 'rgb(30, 30, 130)',
         data: ytemps
     }]
 },


 options: {}
});
 }



async function get_Data()
     {
         const response=await fetch('/static/datasets/co2.csv');
         const  data=await response.text();
        
         const table=data.split('\n').slice(1);
     
         table.forEach(row=>{
             const columns=row.split(',');
             console.log(columns);
             const year=columns[0];
             xlabels.push(year);
             const temp=columns[1];
             ytemps.push(temp);
            

         });
    
     }
     chartIt();