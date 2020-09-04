import React, { Component } from 'react'
import ReactDom from "react-dom";

function Lead() {
    state = {
        id: '',
      }
    
      handleChange = event => {
        this.setState({ id: event.target.value });
      }
    
      handleSubmit = event => {
        event.preventDefault();
    
        axios.delete(`https://jsonplaceholder.typicode.com/users/${this.state.id}`)
          .then(res => {
            console.log(res);
            console.log(res.data);
          })
      }
      
    return (
        <div>
        <form onSubmit={this.handleSubmit}>
          <label>
            Person Name:
            <input type="text" name="name" onChange={this.handleChange} />
          </label>
          <button type="submit">Add</button>
        </form>
      </div>
    )
}