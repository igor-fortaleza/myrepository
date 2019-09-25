  const crypto = require('crypto')
  const secret = 'jjjjjjjjjjjjjjjjjjjjupjjjjjjjjjj'

  const encrypt = value => {
    const iv = Buffer.from(crypto.randomBytes(16))
    const cipher = crypto.createCipheriv('aes-256-cbc', Buffer.from(secret), iv)
    let encrypted = cipher.update(value)
    encrypted = Buffer.concat([encrypted, cipher.final()])

    //separar 2 valores para serem retornado individualmente
    return `${iv.toString('hex')}:${encrypted.toString('hex')}`
  }

  const decrypt = value => {
    const [iv, encrypted] = value.split(':')
    const ivBuffer = Buffer.from(iv, 'hex')
    const decipher = crypto.createCipheriv('aes-256-cbc', Buffer.from(secret), ivBuffer)
    let content = decipher.update(Buffer.from(encrypted, 'hex'))
    content = Buffer.concat([content, decipher.final() ])
    return content.toString()
  }

  const crypted = encrypt('Igor Alves')
  console.log(crypted)
  const decrypted = decrypt(crypted)
  console.log(decrypted)

  //erro .. https://www.youtube.com/watch?v=Ai_Pry8RCH0
