import React from 'react';
import CircularProgress from '@material-ui/core/CircularProgress';
import styled from 'styled-components';
const LoadingPosition = styled.div`
  margin-top:15%;
  text-align: center;
`;

const LoadingCircle = props => {
  return React.createElement(LoadingPosition, null, React.createElement(CircularProgress, {
    color: props.color || "secondary"
  }), React.createElement("p", null, React.createElement("b", null, React.createElement("i", null, props.text))));
};

export default LoadingCircle;