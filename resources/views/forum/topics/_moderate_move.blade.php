{{--
    Copyright 2015 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
<button
    class="forum-topic-nav__button-circle"
    data-target="#forum-topic-move-modal"
    data-toggle="modal"
    type="button"
    title="{{ trans('forum.topic.move') }}"
>
    <i class="fa fa-ellipsis-h"></i>
</button>

@section('script')
    @parent

    <div id="forum-topic-move-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body modal-body--page">
                    {!! Form::open(['url' => route('forum.topics.move', $topic->topic_id), 'data-remote' => true]) !!}
                        <select name="destination_forum_id">
                            @foreach (App\Models\Forum\Forum::moveDestination()->get() as $forum)
                                <option value="{{ $forum->getKey() }}"
                                    {{ $forum->isOpen() ? '' : 'disabled' }}
                                >
                                    {{ str_repeat('&ndash;', $forum->currentDepth()) }}
                                    {{ $forum->forum_name }}
                                </option>
                            @endforeach
                        </select>

                        <p>
                            <button>{{ trans('common.buttons.save') }}</button>
                        </p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
