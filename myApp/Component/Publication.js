import React from 'react';
import {StyleSheet, View, Text, Button, Image} from 'react-native';


class Publication extends React.Component {

  render() {
    const pub = this.props.pub;
    return (
      <View style={styles.conteneur}>
          <View style={styles.haut_de_pub}>
                <View style={styles.publisher}>
                      <Image style={styles.pdp} source={{uri: pub.pdp }} />
                      <Text> {pub.nom} </Text>
                </View>
                <View style={styles.options}>
                      <Text> ... </Text>
                </View>
          </View>
          <Text style={styles.heure}> heure de publication </Text>
          <View style={styles.description}>
                  <Text numberOfLines={6} > {pub.texte} </Text>
          </View>
          <View >
                  <Image styles={styles.image} source={{uri: pub.image }}/>
          </View>
          <View style={styles.button}>
                <View style={{flex:1, paddingLeft: 5, paddingRight: 5}}>
                  <Button title='Interessant' onPress={() => {}}/>
                </View>
                <View style={{flex:1, paddingLeft: 5, paddingRight: 5}}>
                  <Button title='Envoyer CV' onPress={() => {}}/>
                </View>
          </View>
      </View>

    );
  }
};


const styles = StyleSheet.create({
  conteneur: {
    backgroundColor: '#999',
    marginBottom: 20
  },

  publisher: {
    flexDirection: 'row',
    flex: 4
  },

  pdp: {
    width: 25,
    height: 25
  },

  haut_de_pub: {
    flexDirection: 'row',

  },

  heure: {
    marginBottom: 5,
    flex: 1,
    fontSize: 9
  },

  description: {
    backgroundColor: '#777',
    flex: 3,
    flexWrap: 'wrap',
  },

  image: {
    width: 320,
    backgroundColor: '#666',
    flex: 5,
    height: 200
  },

  options: {
    flex: 1,
    textAlign: 'left'
  },

  button: {
    flexDirection: 'row',
    justifyContent: 'center',
    flex: 1,
    alignItems: 'flex-end'
  }

});

export default Publication
