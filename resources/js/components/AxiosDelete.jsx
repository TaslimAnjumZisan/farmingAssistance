import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import axios from 'axios';
  
class AxiosDelete extends Component {
    constructor(props)
    {
        super(props)
this.state={
    landcode:''
}
    }

changeHandler = (e) =>{
    this.setState({[e.target.name]: e.target.value})
}
submitHandler = (e) =>{
    e.preventDefault()
    this.setState()
    console.log(this);
    axios.post('http://localhost:8000/api/land/delete', this.state)
    .then(response=>{
console.log(response)
    })
.catch(error =>{
    console.log(error)
})
}
   

    render() {
      const {landcode}=this.state
        return (
            <div >
                    <form onSubmit={this.submitHandler}>
                    <div> <input type="text" name="landcode" placeholder='Land Code' value={landcode}  onChange={this.changeHandler} /></div>
                        <div> <input type="submit" /></div>
                    </form>
                 
                </div>
           
        );
    }
}
  

export default AxiosDelete;



if (document.getElementById('axiodelete')) {
    const Index = ReactDOM.createRoot(document.getElementById("axiodelete"));

    Index.render(
        <React.StrictMode>
            <AxiosDelete/>
        </React.StrictMode>
    )
}
