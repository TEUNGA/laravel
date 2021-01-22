 FROM node:12
 WORKDIR /public
 COPY . .
 RUN yarn install --production
 CMD ["docker", "index.php"]