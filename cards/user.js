let fetchbtn = document.getElementById("fetchbtn");
fetchbtn.addEventListener("click", buttonClick);

function buttonClick() {

  // var preson = [{
  //   "login": "mojombo",
  //   "id": 1,
  //   "node_id": "MDQ6VXNlcjE=",
  //   "avatar_url": "https://avatars.githubusercontent.com/u/1?v=4",
  //   "gravatar_id": "",
  //   "url": "https://api.github.com/users/mojombo",
  //   "html_url": "https://github.com/mojombo",
  //   "followers_url": "https://api.github.com/users/mojombo/followers",
  //   "following_url": "https://api.github.com/users/mojombo/following{/other_user}",
  //   "gists_url": "https://api.github.com/users/mojombo/gists{/gist_id}",
  //   "starred_url": "https://api.github.com/users/mojombo/starred{/owner}{/repo}",
  //   "subscriptions_url": "https://api.github.com/users/mojombo/subscriptions",
  //   "organizations_url": "https://api.github.com/users/mojombo/orgs",
  //   "repos_url": "https://api.github.com/users/mojombo/repos",
  //   "events_url": "https://api.github.com/users/mojombo/events{/privacy}",
  //   "received_events_url": "https://api.github.com/users/mojombo/received_events",
  //   "type": "User",
  //   "site_admin": false
  // },
  // {
  //   "login": "defunkt",
  //   "id": 2,
  //   "node_id": "MDQ6VXNlcjI=",
  //   "avatar_url": "https://avatars.githubusercontent.com/u/2?v=4",
  //   "gravatar_id": "",
  //   "url": "https://api.github.com/users/defunkt",
  //   "html_url": "https://github.com/defunkt",
  //   "followers_url": "https://api.github.com/users/defunkt/followers",
  //   "following_url": "https://api.github.com/users/defunkt/following{/other_user}",
  //   "gists_url": "https://api.github.com/users/defunkt/gists{/gist_id}",
  //   "starred_url": "https://api.github.com/users/defunkt/starred{/owner}{/repo}",
  //   "subscriptions_url": "https://api.github.com/users/defunkt/subscriptions",
  //   "organizations_url": "https://api.github.com/users/defunkt/orgs",
  //   "repos_url": "https://api.github.com/users/defunkt/repos",
  //   "events_url": "https://api.github.com/users/defunkt/events{/privacy}",
  //   "received_events_url": "https://api.github.com/users/defunkt/received_events",
  //   "type": "User",
  //   "site_admin": false
  // },
  // {
  //   "login": "pjhyett",
  //   "id": 3,
  //   "node_id": "MDQ6VXNlcjM=",
  //   "avatar_url": "https://avatars.githubusercontent.com/u/3?v=4",
  //   "gravatar_id": "",
  //   "url": "https://api.github.com/users/pjhyett",
  //   "html_url": "https://github.com/pjhyett",
  //   "followers_url": "https://api.github.com/users/pjhyett/followers",
  //   "following_url": "https://api.github.com/users/pjhyett/following{/other_user}",
  //   "gists_url": "https://api.github.com/users/pjhyett/gists{/gist_id}",
  //   "starred_url": "https://api.github.com/users/pjhyett/starred{/owner}{/repo}",
  //   "subscriptions_url": "https://api.github.com/users/pjhyett/subscriptions",
  //   "organizations_url": "https://api.github.com/users/pjhyett/orgs",
  //   "repos_url": "https://api.github.com/users/pjhyett/repos",
  //   "events_url": "https://api.github.com/users/pjhyett/events{/privacy}",
  //   "received_events_url": "https://api.github.com/users/pjhyett/received_events",
  //   "type": "User",
  //   "site_admin": false
  // },
  // ]

  let main = document.getElementById("main");
  var user = document.getElementById("user");
  console.log("clicked");
  console.log("preson");
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "https://api.github.com/users", true);



  xhr.onload = function () {
    if (this.status === 200) {
      let obj = JSON.parse(this.responseText);
      console.log(obj);
      let main = document.getElementById("main");
      str = "";
      for (key in obj) {
        str += ` <div class="card">
             <div class="img">
                 <img class="avatar" src="${obj[key].avatar_url}" alt="Florin Pop">
             </div>
             <div class="user-info">
             <p class ="p1">${obj[key].type}</p>
             <h1 class = "h1">${obj[key].login}</h1>
              <div class="p">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae maxime nemo at repellendus eum accusamus corrupti.
              </p>
              </div>
             <div class="m">
                <li><p class ="p2">12<p><a href="${obj[key].repos_url}"><strong>Posts</strong></a></li>
                 <li> <p class ="p2">127<p> <a href="${obj[key].followers_url}"><strong>Follower</strong></a></li>
                 <li> <p class ="p2">9798<p> <a href="${obj[key].following_url}"><strong>Following</strong></a></li>
             </div>
             </ul>
            </div>
            </div>
             `;
      }
      main.innerHTML += str;
    }
  };
  xhr.send();
}
