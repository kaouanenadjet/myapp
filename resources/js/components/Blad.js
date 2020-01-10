import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Blad extends Component {
    render() {
        return (
 <div className="container">
       <div className="row justify-content-center">
             <div className="col-md-8">
                <div className="card">
                   <div className="card-header">Example Component</div>
                   
                    <div className="card-body">
                       i'm an blade!
                    </div>
                  </div>
                </div>
              </div>
        </div>

        );
    }
}

if (document.getElementById('blad')) {
    ReactDOM.render(<Blad />, document.getElementById('blad'));
}
