const URL = "fetch.php?act=fetch";

const getData = function () {
  return axios.get(URL, {
    headers: {
      "Content-Type": "application/json",
    }
  });
};

// Append HTML to body
document.body.innerHTML = document.body.innerHTML + 
  `<div id="vwidget">
    <h5 class="vwidget__name">James from London, UK</h5>
    <p class="vwidget__action fs-12">just subscribed for Product #1</p>
    <div class="vwidget__whenwrapper">
      <p class="vwidget__when fs-12">7 min. ago</p>
      <p class="vwidget__verifiedby fs-12" style="justify-content: flex-end;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"       class="vwidget__verifiedtick" width="18px" height="18px">
          <path d="M0 0h24v24H0z" fill="none" />
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" /></svg>
        <!-- by <span style="display:none">oneProof</span>-->
      </p>
    </div>
  </div>`;

function setData(item,other) {
  document.getElementsByClassName(
    "vwidget__name"
  )[0].innerHTML = `@${item.username}`;
  document.getElementsByClassName(
    "vwidget__action"
  )[0].innerHTML = `${other[0]} $${item.amount} ${other[1]} ${item.method}`;

  document.getElementsByClassName("vwidget__when")[0].innerHTML = item.time +' ' +other[2];
}

getData().then((res) => {
  const data = res.data;
  console.log("hi ", res.data);
  let index = 0;

  const app = document.getElementById("vwidget");

  window.setTimeout(() => {
    // Reset index if it reaches the end
    if (index == data.data.length) index = 0;
    // Set data in the variables
    setData(data.data[index],data.other);

    app.classList.add("vwidget-slide-in");
    app.classList.remove("vwidget-slide-out");

    window.setTimeout(() => {
      app.classList.add("vwidget-slide-out");
      app.classList.remove("vwidget-slide-in");
      // Increase index when sliding out
      index++;
    }, 5000);
  }, 1500);

  window.setInterval(() => {
    // Reset index if it reaches the end
    if (index == data.data.length) index = 0;
    // Set data in the variables
    setData(data.data[index],data.other);

    app.classList.add("vwidget-slide-in");
    app.classList.remove("vwidget-slide-out");

    window.setTimeout(() => {
      app.classList.add("vwidget-slide-out");
      app.classList.remove("vwidget-slide-in");
      // Increase index when sliding out
      index++;
    }, 5000);
  }, 12000);
});
