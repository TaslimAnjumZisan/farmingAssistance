import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';

class AxioGet extends Component {
  state = {
        posts: []
      }
    
      componentDidMount() {
        axios.get('http://localhost:8000/api/land/list')
        .then(response => {
          const posts = response.data;
          this.setState({posts});
         
        })
      }
   
        render(){
          return(
              <table class="table">
              <thead>
                  <tr class="bg-primary">
                      <th scope="col">Land Code</th>
                      <th scope="col">Owner Name</th>
                      <th scope="col">Land Location</th>
                      <th scope="col">Land Size</th>
                      <th scope="col">Owner Contact</th>
                      <th scope="col">Land Registration Number</th>
                  </tr>
              </thead>
              <tbody>
                  {this.state.posts && this.state.posts.map(post => 
                      <tr>
                          <td scope="row">{post.landcode}</td>
                          <td>{post.ownerusername}</td>
                          <td>{post.landlocation}</td>
                          <td>{post.landsize}</td>
                          <td>{post.ownercontact}</td>
                          <td>{post.landregistrationnumber}</td>
                      </tr>)}
              </tbody>
          </table>
  
          )
      }



}
  
  export default AxioGet;
  
if (document.getElementById('axioget')) {
  const Index = ReactDOM.createRoot(document.getElementById("axioget"));

  Index.render(
      <React.StrictMode>
          <AxioGet/>
      </React.StrictMode>
  )
}
