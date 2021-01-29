import React from 'react';

class Example extends React.Component{
  constructor(){
    super();
  }

  render(){
    return <h2>This is an Example {this.props.number}</h2>;
  }
}

export default Example;

