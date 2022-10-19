function create_table(data){
    
    document.getElementById('rowcount').innerText=data.length;
    document.getElementById('totalcount').innerText=data.length;
    var table_body=document.getElementById("custtable");
    table_body.innerText="";
    
    for(var i=0;i<data.length;i++)
    {
        var row=document.createElement('tr');
        row.classList.add('.row');
        row.setAttribute("scope","row");
        
        var tdata1=document.createElement('th');
        var tdata2=document.createElement('td');
        var tdata3=document.createElement('td');
        var tdata4=document.createElement('td');
        var tdata5=document.createElement('td');
        var tdata6=document.createElement('td');
        tdata1.innerText=data[i]['Customer_ID'];
        tdata2.innerText=data[i]['Customer_Name'];
        tdata3.innerText=data[i]['Address'];
        tdata4.innerText=data[i]['Email'];
        tdata5.innerText="+"+data[i]['ISD_Code']+"-"+data[i]['Mobile_Number'];
        tdata6.innerText=data[i]['Notes'];

        tdata1.classList.add('.text-primary');
        tdata2.classList.add('.text-primary');

        row.appendChild(tdata1);
        row.appendChild(tdata2);
        row.appendChild(tdata3);
        row.appendChild(tdata4);
        row.appendChild(tdata5);
        row.appendChild(tdata6);

        table_body.appendChild(row);
    }
}