function display(val)
{
    document.getElementById("d").value=val;
}
function calculate(val)
{
    if(document.getElementById("d").value=="0"){
        document.getElementById("d").value=val;

    }else{
    document.getElementById("d").value+=val;
  
}
  document.getElementById("myButton1").value="C";
  }
function equal()
{
    try
    {
      display(eval(document.getElementById("d").value))
    }
    catch(e)
    {
      display(e)
    }
}
 
