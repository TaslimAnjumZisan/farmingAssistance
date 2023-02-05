import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import axios from 'axios';
  
class AxiosUpdate extends Component {
    constructor(props)
    {
        super(props)
this.state={
    landcode:'',
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
    axios.post('http://localhost:8000/api/land/update', this.state)
    .then(response=>{
console.log(response)
    })
.catch(error =>{
    console.log(error)
})
}
   

    render() {
      const {landcode,landLocation,landSize,ownerUserName,ownerContact,landRegistrationNumber}=this.state
        return (
            <div >
                    <form onSubmit={this.submitHandler}>
                    <div> <input type="text" name="landcode" placeholder='Land Code' value={landcode}  onChange={this.changeHandler} /></div>
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
  

export default AxiosUpdate;



if (document.getElementById('axioupdate')) {
    const Index = ReactDOM.createRoot(document.getElementById("axioupdate"));

    Index.render(
        <React.StrictMode>
            <AxiosUpdate/>
        </React.StrictMode>
    )
}
