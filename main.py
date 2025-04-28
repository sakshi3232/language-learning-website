from flask import Flask, request, jsonify
from flask_cors import CORS  # Import CORS
from deep_translator import GoogleTranslator

app = Flask(__name__)
CORS(app)  # Initialize CORS

@app.route('/translate', methods=['POST'])
def translate():
    try:
        # Get the text from the request
        data = request.get_json()
        text = data.get('text', '')

        # Translate the text
        translated_text = GoogleTranslator(source='en', target='mr').translate(text)

        # Return the translation as a JSON response
        return jsonify({'translation': translated_text})
    except Exception as e:
        return jsonify({'error': str(e)}), 500

if __name__ == '__main__':
    app.run(debug=True)
