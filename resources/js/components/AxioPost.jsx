import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import axios from 'axios';
  
class AxioPost extends Component {
    constructor(props)
    {
        super(props)
this.state={
    landLocation:'',
    landSize:'',
    ownerUserName:'',
    ownerContact:'',
    landRegistrationNumber:''
}
    }

changeHandler = (e) =>{
    this.setState({[e.target.name]: e.target.value})
}
submitHandler = (e) =>{
    e.preventDefault()
    this.setState()
    console.log(this);
    axios.post('http://localhost:8000/api/land/create', this.state)
    .then(response=>{
console.log(response)
    })
.catch(error =>{
    console.log(error)
})
}
   

    render() {
      const {landLocation,landSize,ownerUserName,ownerContact,landRegistrationNumber}=this.state
        return (
            <div >
                    <form onSubmit={this.submitHandler}>
                    <div> <input type="text" name="ownerUserName" placeholder='Owner name' value={ownerUserName}  onChange={this.changeHandler} /></div>
                        <div> <input type="text" name="landLocation" placeholder='Land location' value={landLocation} onChange={this.changeHandler}/></div>
                        <div> <input type="text" name="landSize" placeholder='land size' value={landSize}  onChange={this.changeHandler} /></div>
                       
                        <div> <input type="text" name="ownerContact" placeholder='contact' value={ownerContact}  onChange={this.changeHandler} /></div>
                        <div> <input type="text" name="landRegistrationNumber" placeholder='Land registration number' value={landRegistrationNumber}  onChange={this.changeHandler} /></div>
                      

                        <div> <input type="submit" /></div>
                    </form>
                 
                </div>
           
        );
    }
}
  

export default AxioPost;



if (document.getElementById('axiopost')) {
    const Index = ReactDOM.createRoot(document.getElementById("axiopost"));

    Index.render(
        <React.StrictMode>
            <AxioPost/>
        </React.StrictMode>
    )
}
