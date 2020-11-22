const xlabels=[];
const ytemps=[];

async function chartIt(){
await  get_Data();
const ctx = document.getElementById('co2').getContext('2d');
const chart = new Chart(ctx, {

 type: 'bar',
 data: {
     labels: xlabels,
     datasets: [{
         label: 'Concentracion atmosferica Co2 mundial',
       
         borderColor: 'rgb(30, 30, 130)',
         backgroundColor:'rgb(30, 30, 130)',
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













     const xaños=[];
     const ytemper=[];
     
     async function dib(){
     await get_temp();
     const ctx1 = document.getElementById('temp').getContext('2d');
     const chart1 = new Chart(ctx1, {
     
      type: 'bar',
      data: {
          labels: xaños,
          datasets: [{
              label: 'Temperatura media global(Durante los ultimos dos milenios)',
            
              borderColor: 'rgb(30, 30, 130)',
              backgroundColor:'rgb(30, 30, 130)',
              data: ytemper
          }]
      },
     
     
      options: {}
     });
      }
     
     
     
     async function get_temp()
          {
              const response=await fetch('/static/datasets/td.csv');
              const  data=await response.text();
             
              const table=data.split('\n').slice(1);
          
              table.forEach(row=>{
                  const columns=row.split(',');
                  const year=columns[0];
                  xaños.push(year);
                  const temp=columns[1];
                  ytemper.push(temp);
                 
     
              });
         
          }
          dib();





          const x=[];
          const y=[];
          
          async function dibu(){
          await get_temp1();
          const ctx2 = document.getElementById('temp2').getContext('2d');
          const chart2 = new Chart(ctx2, {
          
           type: 'line',
           data: {
               labels: x,
               datasets: [{
                   label: 'Temperatura Media global(1880-2019)',
                 
                   borderColor: 'rgb(60,158,163)',
                  
                   data: y
               }]
           },
          
          
           options: {}
          });
           }
          
          
          
          async function get_temp1()
               {
                   const response=await fetch('/static/datasets/1880-2019.csv');
                   const  data=await response.text();
                  
                   const table=data.split('\n').slice(1);
               
                   table.forEach(row=>{
                       const columns=row.split(',');
                       const year=columns[0];
                       x.push(year);
                       const temp=columns[1];
                       y.push(temp);
                      
          
                   });
              
               }
               dibu();









               const x1=[];
               const y1=[];
               
               async function dibuj(){
               await get_mar();
               const ctx2 = document.getElementById('mar').getContext('2d');
               const chart2 = new Chart(ctx2, {
               
                type: 'line',
                data: {
                    labels: x1,
                    datasets: [{
                        label: 'Nivel del mar (variacion en mm)\n(1993-2015)',
                      
                        borderColor: 'rgb(60,160,140)',
                       
                        data: y1
                    }]
                },
               
               
                options: {}
               });
                }
               
               
               
               async function get_mar()
                    {
                        const response=await fetch('/static/datasets/nivelmar.csv');
                        const  data=await response.text();
                       
                        const table=data.split('\n').slice(1);
                    
                        table.forEach(row=>{
                            const columns=row.split(',');
                            const year=columns[0];
                            x1.push(year);
                            const temp=columns[1];
                            y1.push(temp);
                           
                            
                        });
                   
                    }
                    dibuj();        
                    
                    
                    const x2=[];
                    const y2=[];
                    
                    async function dibuja(){
                    await get_mar18();
                    const ctx2 = document.getElementById('mar18').getContext('2d');
                    const chart2 = new Chart(ctx2, {
                    
                     type: 'bar',
                     data: {
                         labels: x2,
                         datasets: [{
                             label: 'Nivel del mar (variacion en mm)(1880-2015)',
                           
                             borderColor: 'rgb(30, 30, 130)',
                            backgroundColor:'rgb(30, 30, 130)',
                            
                             data: y2
                         }]
                     },
                    
                    
                     options: {}
                    });
                     }
                    
                    
                    
                    async function get_mar18()
                         {
                             const response=await fetch('/static/datasets/mar1880-2015.csv');
                             const  data=await response.text();
                            
                             const table=data.split('\n').slice(1);
                         
                             table.forEach(row=>{
                                 const columns=row.split(',');
                                 const year=columns[0];
                                 x2.push(year);
                                 const temp=columns[1];
                                 y2.push(temp);
                                
                                 
                             });
                        
                         }
                         dibuja(); 
                




                         const x3=[];
                         const y3=[];
                         
                         async function dibujar(){
                         await get_hielo();
                         const ctx2 = document.getElementById('ant').getContext('2d');
                         const chart2 = new Chart(ctx2, {
                         
                          type: 'line',
                          data: {
                              labels: x3,
                              datasets: [{
                                  label: 'Variacion masa de la antartida desde 2003(en gigatoneladas)',
                                
                                  borderColor: 'rgb(30, 80, 130)',
                                 
                                 
                                  data: y3
                              }]
                          },
                         
                         
                          options: {}
                         });
                          }
                         
                         
                         
                         async function get_hielo()
                              {
                                  const response=await fetch('/static/datasets/hieloantartid.csv');
                                  const  data=await response.text();
                                 
                                  const table=data.split('\n').slice(1);
                              
                                  table.forEach(row=>{
                                      const columns=row.split(',');
                                      const year=columns[0];
                                      x3.push(year);
                                      const temp=columns[1];
                                      y3.push(temp);
                                     
                                      
                                  });
                             
                              }
                              dibujar(); 